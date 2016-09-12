# CLI Router

During using of `generate` method of `router` via CLI wrong URLs are generated. Instead of your application domain `localhost` is found.
This bundle fixes URL generation by using `DependencyInjection` `Compiler`.

## Installation

1. add to composer.json:

```
"litvinab/cli-router": "dev-master"
```

2. add to AppKernel.php:

```            
new Litvinab\Bundle\CliRouterBundle\CliRouterBundle()
```

3. add to parameters.yml:

```
  app.domain: example.com
```