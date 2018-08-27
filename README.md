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
    public $description;
   
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
   
    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
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
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }
   
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
   
    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }
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