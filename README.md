# ContentWidget plugin
The ContentWidget plugin is a widget printing statically configured for [Urlaub.be](https://github.com/urlaube/urlaube).

## Installation
Place the folder containing the plugin into your plugins directory located at `./user/plugins/`.

## Configuration
In order to provide the content the widget shall contain you can set the following value:
```
Plugins::set("contentwidget", null);
```

The set value may either be a `Content` object or an array of `Content` objects.

