# landoretti
Frontend: Een veilingsite voor kunstmerk. Responsive website moet hetzelfde eruitzien als het opgegeven design. CSS framework: Foundation.  CSS compiler: SASS.

##  logboek
29/11/17 initial project with foundation, atoms and blades  
30/11/17 atoms: buttons, forms, groups, images, lists, tables, text, variables  
1/12/17 header: top line, logo & logo container, personal options and installing font awesome  
2/12/17 header: search  
6/12/17 header: navigation, languages and molecules  
7/12/17 header: state menu  
15/12/17 header: interactive state  
26/12/17 Intro block: carousel with motion ui  
27/12/17 Intro block: orbit bullets, orbit arrows, container and text  
6/1/17 Carousel fix full screen  
7/1/17 Responsive to Medium Screen and hamburger menu  
9/1/17 Responsive to Small screen  
10/1/17 info block

## init project (terminal or cmd)
- `laravel new landoretti` (start project called landoretti)
- `yarn install` (install all depencies for project)  
- `yarn run watch` (run script watch for autocompiling sass)  
- `php artisan serve` (start php built-in dev server)  
- `npm install foundation-sites --save-dev` (install foundation) 
- `npm install font-awesome --save-dev` (install font awesome)  

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
- in **resources/assets/js/boostrap.js**, look for `require('bootstrap-sass');` and remove it  
- go to this path (with finder or file explorer) **node_modules\foundation-sites\scss\settings** and copy the file **_settings.scss** to the new path: **resources\assets\sass**, and you can remove the **variable.scss** file  
- open the file **_settings.scss** in code editor and remove the code:
``` html
@import 'util/util';
```
- replace it with:  
``` html
@import "../../../node_modules/foundation-sites/scss/util/util";
```
- open the file **webpack.mix.js** in the root of your project and remove the code:
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
## init font awesome in project
- in **resources/assets/sass/app.scss**, add this code:  
``` html
// Font Awesome
@import "node_modules/font-awesome/scss/font-awesome.scss";
```