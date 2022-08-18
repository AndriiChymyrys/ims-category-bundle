## Install

### Add routing to `config/routes.yaml`
```yaml
ims_category:
    resource: "@ImsCategoryBundle/Resources/config/routes/routing.xml"
    prefix: "category"
    name_prefix: "category_"
```

### Add bundle to `config/packages/morph_config.yaml` in `publish_bundle` section
```yaml
- { namespace: 'WideMorph\Ims\Bundle\ImsCategoryBundle\ImsCategoryBundle', path: 'widemorph/ims-category-bundle' }
```

### Add use of trait `CategoryProductRelationTrait` to `App\Entity\Product`
```php
use CategoryProductRelationTrait;
```

### Run command to generate migration
```shell
console doctrine:migrations:diff
```

### Run command to execute migration
```shell
console doctrine:migrations:migrate
```