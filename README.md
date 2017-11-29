# landoretti
Frontend: Een veilingsite voor kunstmerk. Responsive website moet hetzelfde eruitzien als het opgegeven design. CSS framework: Foundation.  CSS compiler: SASS.

## init project (terminal or cmd)
- `laravel new landoretti` (start project called landoretti)
- `yarn install` (install all depencies for project)  
- `yarn run watch` (run script watch for autocompiling sass)  
- `php artisan serve` (start php built-in dev server)  
- `npm install foundation-sites --save-dev` (install foundation package.json) 

## init foundation in project
- in **resources/assets/sass/app.scss**, remove all the code and replace with:  
``` html
// Settings
@import "settings";

// Foundation
@import "node_modules/foundation-sites/scss/foundation";

// Include Everything (True) for the Flex Grid;
@include foundation-everything(true);
```
- in **resources/assets/js/boostrap.js**, look for **require('bootstrap-sass');** and remove it  
- go to this path (with finder or file explorer) **node_modules\foundation-sites\scss\settings** and copy the file **_settings.scss** to the new path: **resources\assets\sass**, and you can remove the **variable.scss** file  
- open the file **_settings.scss** in code editor, look for `@import 'util/util';` and replace with:  
`@import "../../../node_modules/foundation-sites/scss/util/util";`  
- open your file **webpack.mix.js** in the root of your project and remove the code:
``` html  
mix.js('resources/assets/js/app.js', 'public/js')  
    .sass('resources/assets/sass/app.scss', 'public/css');
```
- replace it with:  
``` html
mix.sass('resources/assets/sass/app.scss', 'public/css');
    mix.combine([
        'node_modules/jquery/dist/jquery.min.js',
        'node_modules/foundation-sites/dist/js/foundation.min.js'
    ], 'public/js/app.js');
```
- in the head of blade file add the css link file:  
``` html
<link href="/css/app.css" rel="stylesheet">
```
- in the footer of blade file add the js script file:  
``` html
<script src="/js/app.js"></script>
<script> $(document).foundation();</script>
```


  
