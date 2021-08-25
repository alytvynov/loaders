Class helpers
=================
Traits for classes and data manipulations.
- Permits get class data in the `array`
- Load data from `array` to object properties by setters. 

Installation
--------
```bash
composer require alytvynov/timestampable
```

Example of usage
--------
```php
use Common\Traits\DataLoader;
use Common\Traits\RawLoader;

class Product
{
    use DataLoader;
    use RawLoader;
   
    /**
     * @var int
     */
    protected int $id;
   
    /**
     * @var string
     */
    protected string $title;
   
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
   
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
    'id'          => 1,
    'title'       => 'This is product',
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

