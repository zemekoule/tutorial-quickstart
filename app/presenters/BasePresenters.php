<?php
/**
 * Created by PhpStorm.
 * User: jm
 * Date: 27.1.18
 * Time: 11:44
 *
 * @todo Kašlete na PSR4
 * @todo commitování vendoru je dobrá věc
 *
 */

namespace App\Presenters;


use Nette\Application\Helpers;
use Nette\Application\UI\Presenter;
use ReflectionClass;


abstract class BasePresenters extends Presenter
{

	public function formatTemplateFiles() {
		list(, $presenter) = Helpers::splitName($this->getName());
		$rc = new ReflectionClass($this);

		return 1;
		//return [dirname($rc->getFileName())]
	}

}