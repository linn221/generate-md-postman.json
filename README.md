> PHP script for generating markdown documentation from Postman json file.
> Currently work with v2.1 export

### Run
```shell
composer install
php index.php {export.json} >output.md
```

### customize
#### replace global variables, templates in Request class
```php
    public static $globals = [
        '{{pos_url}}' => 'https://c.mmsdev.site/api/v1',
        '{{password}}' => 'password'
    ];
```

```php
    $result = <<<PAYLOAD

$description
*$method*
\```http
$url
\```
[*$mode*]

$table_string

PAYLOAD;

```
> rendered markdown table using kba-team/markdown-table package
