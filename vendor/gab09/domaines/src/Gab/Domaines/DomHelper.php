<?php namespace Gab\Domaines;

class DomHelper {
	

	/**
	 * All of the registered messages.
	 *
	 * @var array
	 */
	public static function listForSelect($model, $attribut, $scope = null, $defaut = true)
	{

// dd($model);
		if ($scope !== null) {
			$scope = 'scope'.$scope;
			$list = $model->$scope();

		}else{
			foreach($model->get(['id', $attribut]) as $item)
			{
				$list[$item->id] = $item->{$attribut};
			}
		}
		if ($defaut === true) {
		$list[0] = CREATE_FORM_DEFAUT_LIST;
		}

		return $list;
	}


}
