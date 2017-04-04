<?php


interface ICrud {

	public function create();	
	public function readSingle();
	public function readAll();
	public function update();
	public function delete();

}