<div id="text-center">
<?php
// uses pieces from https://stackoverflow.com/questions/2594211/simple-dynamic-breadcrumb
// This function will take $_SERVER['REQUEST_URI'] and build a breadcrumb based on the user's current path
function breadcrumbs($separator = ' &raquo; ', $home = 'Home') { 
    // This gets the REQUEST_URI (/path/to/file.php), splits the string (using '/') into an array, and then filters out any empty values
    $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));

    // This will build our "base URL" ... Also accounts for HTTPS :)
    $base = ($_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/Sprint4/';

    // Initialize a temporary array with our breadcrumbs. (starting with our home page, which I'm assuming will be the base URL)
    $breadcrumbs = Array("sets", "packages", "extras", "reserve", "confirmation");

    // Find out the index for the last value in our path array
    $current = 0;
    
    $title = ucwords(str_replace(Array('.php', '_'), Array('', ' '), $path[2]));
    
    foreach ($breadcrumbs AS $current => $value)
    {
        if (strtolower($breadcrumbs[$current]) == strtolower($title))
        {
            break;
        }
    }
    
    $i = 0;
    foreach ($breadcrumbs AS $i => $crumb) {
        if ($i <= $current)
        {
            
            $breadcrumbs[$i] = "<a href=\"$base$crumb.php\">$crumb</a>";
            if ($i == $current)
            {
                $breadcrumbs[$i] .= " (You are here)";
            }
        }       
        // Otherwise, just display the title (minus)
        else
            $breadcrumbs[$i] = strtoupper($breadcrumbs[$i]);
            
    }

    // Build our temporary array (pieces of bread) into one big string :)
    return implode($separator, $breadcrumbs);
}

?>

<p><?= breadcrumbs(' > ') ?></p>
</div>