<?php
namespace Gabs\Controllers;
use Gabs\Models\Personas;
use Gabs\Models\Evaluacion;
use Gabs\Models\WebServiceClient;
use Gabs\Models\Ticket;
use Gabs\Models\Contact;
use Gabs\Models\Catalog;
use Gabs\Models\CI;
use Gabs\Models\Knowledge;
 
class ComercioController extends ControllerBase
{
    /**
     * Default action. Set the public layout (layouts/public.volt)
     */
    public function indexAction()
    {

        echo "<h2>Hola Mundo</h2>";
        /*$pcView = 'servicio/servicios_home_page';
        
        $tck = new Ticket();
        $tckList = $tck->getTickestByUser($this->auth->getName());
        $data = array('tckList' => $tckList);
        if($tckList == 2)
        {
            $pcView = 'servicio/servicios_error_page';
            $data = array( 'error-number' => '500 - Error interno en el servidor', 'error-description' => 'Problemas al establecer conexión a los web service, por favor revisar permisos de acceso y configuración.' );
        }
        //$js = $this->getJsEncuesta();
        $js = $this->getLikeJs();
        echo $this->view->render('theme_default' ,array('lmView'=>'menu/leftMenu','menuSel'=>'','pcView'=>$pcView,'pcData'=> $data,'jsScript'=>$js));
        */
    }

}