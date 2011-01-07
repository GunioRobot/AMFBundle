AMF for Symfony2 (not yet stable)

## Installation

### Add Tecbot\AMFBundle to your src/Bundle dir

    git submodule add git://github.com/tecbot/AMFBundle.git src/Bundle/Tecbot/AMFBundle
    
### Add TecbotAMFBundle to your application Kernel

    // app/AppKernel.php
    public function registerBundles()
    {
        return array(
            //..
            new Bundle\Tecbot\AMFBundle\TecbotAMFBundle(),
            //..
        );
    }
    
### Update your config

    # app/config/config.yml
    amf.config:
        services: # Services
            UserService: UserBundle:User # Map UserService id from AMF to UserBundle:UserService class

## Use

- add all your AMF services into BundleName\AMF\ and extends Bundle\Tecbot\AMFBundle\Service\Service
- add the Service suffix to a class e.g. UserService
- add the Action suffix to a methode e.g. authenticateAction()
    
    <?php
    
    namespace Application\BundleName\AMF;

    use Bundle\Tecbot\AMFBundle\Service\Service;
    
    class UserService extends Service
    {
        public function authenticateAction()
        {
            ///... stuff

            return mixed;
        }
    }