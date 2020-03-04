# yii2-language extension

The extension uses with yii2-cms, yii2-slider, yii2-blocks extensions.

### Installation

- Install with composer:

```bash
composer require abdualiym/yii2-language "^1.0"
```

###Examples

get photo url:
```php
abdualiym\Language::getPhotoUrl($object);
```

get attribute value by app language:
```php
abdualiym\Language::get($object, 'title');
```
