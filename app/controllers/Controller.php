<?php
abstract class Controller{
    public abstract function index();
    abstract public function show($id);
    abstract public function create();
    abstract public function edit($id);
    abstract public function update();
    abstract public function delete();
}
?>