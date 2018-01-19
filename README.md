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
6/1/18 Carousel fix full screen  
7/1/18 Responsive to Medium Screen and hamburger menu  
9/1/18 Responsive to Small screen  
10/1/18 info block  
11/1/18 popular block  
12/1/18 Footer  
14/1/18 Footer rensponsive by grid frame, footer navigation and responsive  
17/1/18 init search, spotlight  
18/1/18 Add search request with validation, overview, register, faq  
19/1/18 my aunctions and responsive table, watchlist, detail images with overlay and sidebar, extensive description, related items, profile, overview, robot, minify, htacces, .env, analytics, image optimalisation, frontend guideline  

## init project (cli)
- `laravel new landoretti` (start project called landoretti)
- `yarn install` (install all depencies for project)  
- `yarn run watch` (run script watch for autocompiling sass)  
- `php artisan serve` (start php built-in dev server)  
- `npm install foundation-sites --save-dev` (install foundation) 
- `npm install font-awesome --save-dev` (install font awesome)  
- `npm run production` (minify files)  

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

## Frontend Guideline
### Includes
Er zijn includes voor: Header, Footer, Navigatie en spotlight  
``` html
@include('includes.header')
@include('includes.footer')
@include('includes.navigation')
@include('includes.spotlight')
```
### Grid Syteem
Om grid systeem te starten maak je een container met de klasse 'grid-container'. In de container geef je aan of je verticaal of horizontaal grid wilt door de klasse 'grid-x' of 'grid-y'. Als je hebt gekozen kan je nu kolommen maken door de klasse 'cell' te gebruiken. Voor responsive kan je tegen de cell zeggen hoe die zich moet gedragen naargelang screensize. Zet bij de klasse cell dan 'small-x', 'medium-x' en 'large-x'. De 'x' moet je veranderen in een getal tussen 1 en 12 naargelang de breedte die je wilt maken met de kolom.  
``` html
<div class="grid-container">
    <div class="grid-x">
        <div class="cell small-12 medium-6, large-3">
            
        </div>
    </div>
</div>
```
### Table
Om een tabel responsive te maken voeg je een klasse toe aan het element 'table' en geef je een data label mee aan het element 'td'.  
``` html
<table class="responsive-card-table">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td data-label="id">1</td>
            <td data-label="name">enzo</td>
        </tr>
    </tbody>
</table>
```
### Pagination
Maak gebruik van de klasse 'pagination' als je paginanummering wilt gebruiken.  
``` html
<div class="pagination">
    <ul class="pagination text-center" role="navigation" aria-label="Pagination">
        <li class="pagination-previous"><a href="#" aria-label="Previous page">&lt;</a></li>
        <li><a href="#" aria-label="Page 1">1</a></li>
        <li><a href="#" aria-label="Page 2">2</a></li>
        <li class="current"><span class="show-for-sr">You're on page</span> 3</li>
        <li><a href="#" aria-label="Page 4">4</a></li>
        <li class="pagination-next"><a href="#" aria-label="Next page">&gt;</a></li>
    </ul>
</div>
```
### Breadcrumb
Maak gebruik van de klasse 'breadcrumbs' voor bruidkruimelnavigatie.  
``` html
<nav aria-label="You are here:" role="navigation">
    <ul class="breadcrumbs">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><span class="show-for-sr">Current: </span>Current page</li>
    </ul>
</nav>
```
### Overlay
Maak gebruik van de klasse 'overlay' om een afbeelding te dekken.  
``` html
<img class="overlay" src="{{ asset('assets/graphics/image.jpg') }}" title="image" alt="image">
```
### Visibility Classes
``` html
<p class="show-for-medium">You are on a medium screen or larger.</p>
<p class="show-for-large">You are on a large screen or larger.</p>

<p class="show-for-small-only">You are <em>definitely</em> on a small screen.</p>
<p class="show-for-medium-only">You are <em>definitely</em> on a medium screen.</p>
<p class="show-for-large-only">You are <em>definitely</em> on a large screen.</p>

<p class="hide-for-medium">You are <em>not</em> on a medium screen or larger.</p>
<p class="hide-for-large">You are <em>not</em> on a large screen or larger.</
```
### Media Queries
``` html
@media #{$small-only} {
}
@media #{$medium-only} {
}
@media #{$large-only} {
}
```


