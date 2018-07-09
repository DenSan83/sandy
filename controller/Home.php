<?php


/**
* Class Home
*
* use to show the home page
*/
class Home
{

    public function showHome($params)
    {

      $manager = new DevinetteManager();
      $devinettes = $manager->findAll();

      $myView = new View('home');
      $myView->render(array('devinettes' => $devinettes));

    }

    public function showContact($params)
    {
      $myView = new View('contact');
      $myView->render();
    }

    public function editDev($params)
    {

      if(isset($params)) extract($params);
      if(isset($id)) {

        $manager = new DevinetteManager();
        $devinette = $manager->find($id);
      } else {
        $devinette = new Devinette();
      }

      $myView = new View('edit');
      $myView->render(array('devinette' => $devinette));
    }

    public function addDev($params)
    {
      $values = $_POST['values'];
      $action = $_POST['values']['action'];

      $manager = new DevinetteManager();
      if ($action == 'create'){
        $manager->create($values);
      } else {
        $manager->edit($values);
      }


      $myView = new View();
      $myView->redirect('home.html');
    }

    public function delDev($params)
    {
      extract($params);
      $manager = new DevinetteManager();
      $manager->delete($id);

      $myView = new View();
      $myView->redirect('home.html');
    }
}
