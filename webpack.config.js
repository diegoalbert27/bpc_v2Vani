const CopyPlugin = require('copy-webpack-plugin')
const path = require('path')

const css = {
    'font-awesome': '@fortawesome/fontawesome-free/css/all.min.css',
    webfonts: '@fortawesome/fontawesome-free/webfonts',
    'datatables/css': 'datatables/media/css/jquery.dataTables.min.css',
    'bootstrap/css': 'bootstrap/dist/css/bootstrap.min.css',
    'bootstrap/css': 'bootstrap/dist/css/bootstrap.min.css.map',
}

const js = {
    popperjs: '@popperjs/core/dist/umd/popper.min.js',
    'bootstrap/js': 'bootstrap/dist/js/bootstrap.min.js',
    jquery: 'jquery/dist/jquery.min.js',
    'datatables/js': 'datatables/media/js/jquery.datatables.min.js',
    axios: 'axios/dist/axios.min.js',
    fullcalendar: 'fullcalendar/index.global.min.js',
    chartjs: 'chart.js/dist/chart.umd.js'
}

const assets = {
    ...js, ...css
}

module.exports = {
    mode: 'production',
    entry: './assets/js/app.js',
    output: {
        path: __dirname + '/assets/build',
        filename: 'bundle.js'
    },
    plugins: [
        new CopyPlugin({
            patterns: Object.keys(assets).map(asset => ({
                from: path.resolve(__dirname, `./node_modules/${assets[asset]}`),
                to:  path.resolve(__dirname, `./assets/libs/${asset}`)
            }))
        })
    ]
}
