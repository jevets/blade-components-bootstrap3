# Laravel Blade Components for Twitter Bootstrap 3 

## Notice

Feel free to use this package, but I guarantee no support. (MIT license)

I use this package for several of my own personal and commercial Laravel projects, and I might change the API any time. If my changes break your usage, sorry, but you shouldn't have much trouble fixing issues. 

Until I publish a stable release, you may wanna just fork it and reference your own copy of the repo.

I'm happy to collaborate; pull requests are quite welcome. 

I'm not sure if I'll ever release a stable and well-tested version, since I'll probably end up switching over to Bootstrap 4 soon enough. And I think there are some packages that already offer some Bootstrap 4 blade components, however, I may write my own if I don't like em (haven't checked em out yet).


## Installation

This project isn't on packagist (may never be), so you'll have to `require` from github or just set up a `repositories` array in your `composer.json`.

```json
"require": {
    "jevets/blade-components-bootstrap3": "dev-master"
},
"repositories": [
    {
        "type": "git",
        "url": "https://github.com/jevets/blade-components-bootstrap3"
    }
]
```

### Laravel

#### Laravel >=5.5

I've got the auto provider thingy set up in `composer.json`, so you don't need to add to `providers`.

#### Laravel ^5.4

Just reference the service provider in your `config/app.php`:

```php
'providers' => Jevets\Blade\Components\Bootstrap3\LaravelServiceProvider::class,
```

## Font Awesome

Some of the components assume [font-awesome](http://fontawesome.io/). You may wish to decouple this, but in my projects I generally include font-awesome as a dependency. (Again, feel free to fork it for your own use).

## Usage

```blade
// As a component
@component('bs3::alert.success')
    Congration, you done it!
@endcomponent

// As an include
@include('bs3::alert', [
    'slot' => 'Congration, you done it!',
])
```

*[congration?](https://i.imgur.com/DAAN8yB.jpg)*

### Panel example

Check out the `src` directory for more... Easiest way to learn is to just start using it.

```blade
@component('bs3::panel', ['type' => 'success'])
    @slot('title', 'My Panel')
    @slot('body')
        You are logged in
    @endslot
@endcomponent

// renders

<div class="panel panel-success">
    <div class="panel-heading">
        <div class="panel-title">
            My Panel
        </div>
    </div>
    <div class="panel-body">
        You are logged in
    </div>
</div>
```

### Label example

```blade
// .label.label-default

@component('bs3::label')
    Default label
@endcomponent

// or you could @include

@include('bs3::label', ['slot' => 'Default label'])


// .label.label-primary

@component('bs3::label', ['type' => 'primary'])
    Primary label
@endcomponent
```

## Publishing Views

It's supports publishing the views if you want em:

```sh
php artisan vendor:publish --class="Jevets\Blade\Components\Bootstrap3\LaravelServiceProvider"
```

## Issues

Please use the GitHub issues tracker for any issues.

## Contributing

Feel free to send pull requests. I'll probably merge them if they add value and don't introduce any breaking changes into my own projects.


