# Loaders - helper traits
Traits for classes and data manipulations.
- Permits get class data in the `array`
- Load data from `array` to object properties by setters. 

## Add to your project
```bash
composer require alytvynov/timestampable
```

### Example of usage in class
```php
use Common\Traits\DataLoader;
use Common\Traits\RawLoader;

class Product
{
    use DataLoader;
    use RawLoader;
   
    /**
     * @var string
     */
    protected string $title;
   
    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
   
    /**
     * @param string $title
     *
     * @return $this                     
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;
        
        return $this;
    }
}
   
```

Load data to object
```
$data = [
    'title' => 'This is product',
];
   
$product = new Product();
$product->loadData($data);
```

Get object's data as array
```
$product->toArray($data);
```

## To run repository locally
```bash
git clone git@github.com:alytvynov/loaders.git
cd loaders
docker-compose up -d
docker exec -it php_loaders bash -c "composer install"
```

Run tests
```bash
docker exec -it php_loaders bash -c "./vendor/bin/phpunit tests"
```

## Additional information
[Packagist](https://packagist.org/packages/alytvynov/loaders)

## About Us
Senior Web developer [Anton Lytvynov](https://lytvynov-anton.com/).
