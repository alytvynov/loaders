Class helpers
=================

Traits for classes and data manipulations.

```php
class Product
{
    use DataLoader;
    use RawLoader;   
   
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $descrition;
}
   
```

Load data to object
```php
$data = [
    'id'          => 1,
    'title'       => 'This is product',
    'description' => 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book . ',
];
   
$product = new Product();
$product->loadData($data);
```

Get object's data as array
```php
$product->toArray($data);
```