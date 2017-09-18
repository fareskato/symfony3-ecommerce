s3_shop
=======

A Symfony project created on September 12, 2017, 6:26 pm.

**Override existing service:**
for example if we want to override the category menu service:

01- Make sure that the service is declared in config.yml like so:

under twig attribute
    
    globals:        
        category_menu: '@category_menu' 

02- Declare the service in your bundle services.yml

#### Override the core module services
    fares_catalog.category_menu:
        class: Fares\CatalogBundle\Service\Menu\Category
        arguments : ["@doctrine.orm.entity_manager", "@router"]

03- Create the service class with required functionality
in this case the Category class inside Service directory

04- In the process method in YourBundle/DependencyInjection/Compiler/OverrideServiceCompilerPass class
you remove the old service definition and set new one

05- Edit the build method in ****Bundle.php class  as follow:
    
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass( new OverrideServiceCompilerPass());
    }

Wow :) that's it 
ENJOY   
