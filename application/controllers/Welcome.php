<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	function __construct()
	{
		parent::__construct();
	}


        public function random()
        {
            	// this is the view we want shown
		$this->data['pagebody'] = 'homepage';
		// build the list of authors, to pass on to our view
		$source = $this->quotes->all();
		$authors = array ();
		foreach ($source as $record)
		{
			$authors[] = array (rand(1,7) => $record[rand(1,7)], 'mug' => $record['mug'], 'href' => $record['where']);
		}
		$this->data['authors'] = $authors;
		$this->render();
        }

	/**
	 * Homepage for our app
	 */
        //choose quote entries at random        
	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'homepage';

		// build the list of authors, to pass on to our view
		$source = $this->quotes->all();
		$authors = array ();
		foreach ($source as $record)
		{
			$authors[] = array ('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where'], 'what' => $record['what']);
		}
		$this->data['authors'] = $authors;

		$this->render();
	}

}
