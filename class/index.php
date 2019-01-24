<?php
class FileData {
protected $path;
protected $entity;
protected $data;
public function __construct( $fileName ) {
 $this->entity = $fileName;
 }
public function load() {
 if ( ! file_exists( $this->path . "/" . $this->entity . ".dat" ) ) {
 return false;
 }
 if ( ! $this->data ) {
 $this->data = unserialize( file_get_contents( $this->path . "/" . $this->entity . ".dat" ) );
 }
 return $this->data;
 }
public function update() {
 return file_put_contents( $this->path . "/" . $this->entity . ".dat", serialize( $this->data ) );
 }
} 

class User extends FileData {
    protected $name;
    protected $surname;
    protected $email;
    protected $password;
    public function __construct( $email ) {
     $md5 = md5( $email );
     parent::__construct( $md5 );
     $isLoaded = $this->load();
     if ( $isLoaded ) {
     $this->populate();
     } else {
     $this->email = $email;
     $this->save();
     }
     }
    public function save() {
     $this->data = [ 'name' => $this->name, 'surname' => $this->surname, 'email' => $this->email,
    'password' => $this->password, ];
     $this->update();
     }
    private function populate() {
     $this->name = $this->data['name'];
     $this->surname = $this->data['surname'];
     $this->email = $this->data['email'];
     $this->password = $this->data['password']; 
    }
}