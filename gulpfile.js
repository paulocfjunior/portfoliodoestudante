var gulp = require('gulp'),
    browserSync = require('browser-sync'),
    jshint = require('gulp-jshint'),
    jshintStylish = require('jshint-stylish'),
    csslint = require('gulp-csslint'),
    php = require('gulp-connect-php');

//browser-sync é usado para realizar o processo de salvar, exemplo
//tod o processo que eu alterar no codigo, automaticamente será exibido na pagina
//é possivel tb obter a sincronização em aparelhos moveis em tempo real
gulp.task('server', function() {
    browserSync.init({
        server: {
            baseDir: 'src'
        }
    });

    gulp.watch('../src/**/*').on('change', browserSync.reload);//aplica o reload
    //mostra erro, evita ficar vendo no console

    gulp.watch('../src/js/**/*.js').on('change', function (event) {
        console.log("Linting " + event.path);
        gulp.src(event.path)
            .pipe(jshint())
            .pipe(jshint.reporter(jshintStylish));//exibe o relatorio num reporter
    });
//verifica erro em css
    gulp.watch('../src/css/**/*.css').on('change', function (event) {
        console.log("Linting " + event.path);
        gulp.src(event.path)
            .pipe(csslint())
            .pipe(csslint.reporter());
    });


    //conecta com php, organizar depois
    /* var reload  = browserSync.reload;

gulp.task('php', function() {
    php.server({ base: 'path/to/root/folder', port: 8010, keepalive: true});
});
gulp.task('browser-sync',['php'], function() {
    browserSync({
        proxy: '127.0.0.1:8010',
        port: 8080,
        open: true,
        notify: false
    });
});
gulp.task('default', ['browser-sync'], function () {
    gulp.watch(['build/*.php'], [reload]);
});*/
});




