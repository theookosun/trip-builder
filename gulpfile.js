const elixir = require('laravel-elixir');
require('laravel-elixir-vue-2');



elixir((mix)=>{
    mix.sass('app.scss'). webpack('app.js');
});

webpack('resources/assets/js/app.js', 'public/js/');