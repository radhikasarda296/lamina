<?php
namespace Beer\Model;

use Beer\Model\Beer;
use Laminas\Db\TableGateway\TableGateway;
use RuntimeException;
class BeerTable
{
	private $tableGateway;

	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGateway = $tableGateway;
	}

	public function fetchAll()
	{
		return $this->tableGateway->select();
	}

	public function getBeer($id)
	{
		$id = (int) $id;
		$formset = $this->tableGateway->select(['id' => $id]);
		$row = $formset->current();
		if(!$row){
			throw new RuntimeException(
				sprintf("Could not find record with id %d", $id)
			);
		}
		return $row;
	}

	public function saveBeer(Beer $beer)
	{
		$data = [
			'id' => $beer->id,
			'brewery_id' => $beer->brewery_id,
			'name' => $beer->name,
			'cat_id' => $beer->cat_id,
			'style_id' => $beer->style_id,
			'abv' => $beer->abv,
			'ibu' => $beer->ibu,
			'srm' => $beer->srm,
			'upc' => $beer->upc,
			'filepath' => $beer->filepath,
			'descript' => $beer->descript,
			'add_user' => $beer->add_user,
		];
		$id = (int) $beer->id;
		$formset = $this->tableGateway->select(['id' => $id]);
		$row = $formset->current();
		if(!$row){
			$this->tableGateway->insert($data);
		}else{
			$this->tableGateway->update($data,['id'=>$id]);	
		}

	}

	public function deleteBeer($id){
		$this->tableGateway->delete(['id' => (int) $id]);
	}
}