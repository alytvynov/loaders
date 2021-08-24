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
```php
$data = [
    'id'          => 1,
    'title'       => 'This is product',
];
   
$product = new Product();
$product->loadData($data);
```

Get object's data as array
```php
$product->toArray($data);
```
