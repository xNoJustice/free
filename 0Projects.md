# React

```
npx create-react-app my-app
cd my-app
npm start
```

### Material UI

```
npm install @material-ui/core
npm install @material-ui/icons

index.js

import { createMuiTheme, ThemeProvider, CssBaseline, Grid } from '@material-ui/core';

const theme = createMuiTheme({
  palette: {
    type: 'dark',
  },
});

<ThemeProvider theme={theme}>
    <CssBaseline/>
    <Grid
      container
      spacing={0}
      direction="column"
      alignItems="center"
      justify="center"
      style={{ minHeight: '100vh' }}>
      <Product />
    </Grid>
</ThemeProvider>,
```

### Prefers Color Schema

```
import {
  createMuiTheme,
  CssBaseline,
  Grid,
  ThemeProvider,
  useMediaQuery,
} from "@material-ui/core";
function App(){
const prefersDarkMode = useMediaQuery("(prefers-color-scheme: dark)");
  const theme = React.useMemo(
    () =>
      createMuiTheme({
        palette: {
          type: prefersDarkMode ? "dark" : "light",
        },
      }),
    [prefersDarkMode]
  );
return (
    <ThemeProvider theme={theme}>
      <CssBaseline />
      <Grid
      container
      spacing={0}
      direction="column"
      alignItems="center"
      justify="center"
      style={{ minHeight: '100vh' }}></Grid>
    </ThemeProvider>
  );
}
export default App;
```

# Laravel

```
laravel new __PROJECTNAME__ --jet
composer require jeremykenedy/laravel-logger --Logger
composer require laravel/helpers --Helpers
composer require yoeunes/toastr --Toastr
composer require intervention/image --Image Resizer
composer require barryvdh/laravel-debugbar --dev  -- Laravel Debugger
```

### Toastr

```
config/app.php -> providers
Yoeunes\Toastr\ToastrServiceProvider::class

Console :
php artisan vendor:publish --provider='Yoeunes\Toastr\ToastrServiceProvider' --tag="config"
```

### Image Resize

```
config/app.php -> providers
Intervention\Image\ImageServiceProvider::class

config/app.php -> aliases
'Image' => Intervention\Image\Facades\Image::class

Console :
php artisan vendor:publish --provider="Intervention\Image\ImageServiceProviderLaravelRecent"

Controller :
use Image;
```

### Fix Long Key Error

```
App/Providers/AppServiceProvider

use Illuminate\Support\Facades\Schema;
public function boot()
{
    Schema::defaultStringLength(191);
}
```

### Jetstream View Publish

```
php artisan vendor:publish --tag=jetstream-views
```
