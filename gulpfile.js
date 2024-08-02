// Importaciones necesarias
import path from 'path';
import fs from 'fs'
import { glob } from 'glob';

import { src, dest, watch, series } from 'gulp';
import * as dartSass from 'sass';
import gulpSass from 'gulp-sass';

import concat from 'gulp-concat';
import rename from 'gulp-rename';
import terser from 'gulp-terser';

import sharp from 'sharp';

const sass = gulpSass(dartSass);

// Rutas

const paths = {
    sass: 'src/scss/**/*.scss',
    js: 'src/js/**/*.js',
    images: 'src/img/**/*.{jpg,png,svg}',
};

export function css(done) {
    src(paths.sass, { sourcemaps: true })
        .pipe(sass({ outputStyle: 'compressed' })).on('error', sass.logError)
        .pipe(dest('build/css', { sourcemaps: '.' }))
    done();
};

export async function imagenes(done) {
    const srcDir = './src/img';
    const buildDir = './build/img';
    const images = await glob('./src/img/**/*{jpg,png,svg}')
  
    images.forEach(file => {
      const relativePath = path.relative(srcDir, path.dirname(file));
      const outputSubDir = path.join(buildDir, relativePath);
  
      if (path.extname(file) === '.svg') {
        // Copiar SVG sin procesamiento
        copySvg(file, outputSubDir);
      } else {
        procesarImagenes(file, outputSubDir);
      }
    });
    done();
  }
  
  function copySvg(file, outputSubDir) {
    if (!fs.existsSync(outputSubDir)) {
      fs.mkdirSync(outputSubDir, { recursive: true });
    }
    const outputFile = path.join(outputSubDir, path.basename(file));
    fs.copyFileSync(file, outputFile);
  }
  
  function procesarImagenes(file, outputSubDir) {
    if (!fs.existsSync(outputSubDir)) {
      fs.mkdirSync(outputSubDir, { recursive: true })
    }
    const baseName = path.basename(file, path.extname(file))
    const extName = path.extname(file)
    const outputFile = path.join(outputSubDir, `${baseName}${extName}`)
    const outputFileWebp = path.join(outputSubDir, `${baseName}.webp`)
    const outputFileAvif = path.join(outputSubDir, `${baseName}.avif`)
  
    const options = { quality: 75 }
    sharp(file).jpeg(options).toFile(outputFile)
    sharp(file).webp(options).toFile(outputFileWebp)
    sharp(file).avif().toFile(outputFileAvif)
  }

export function js(done) {
    src(paths.js)
        .pipe(concat('bundle.js'))
        .pipe(terser())
        .pipe(rename({suffix: '.min'}))
        .pipe(dest('build/js'))
    done();
};

export function dev(done) {
    watch(paths.sass, css);
    watch(paths.js, js);
    done();
};

export default series(js, css, imagenes, dev);