class Coche: Define la clase llamada Coche.

public $marca;: Esta es una propiedad pública de la clase.

__construct(): Es un método especial llamado constructor que se ejecuta automáticamente cuando creamos un nuevo objeto. Sirve para inicializar las propiedades del objeto.


$this->marca: El $this se refiere al objeto actual. Por ejemplo, $this->marca accede a la propiedad marca del objeto actual.


mostrarInfo(): Es un método que devuelve una cadena con la información del coche.


Visibilidad de Propiedades y Métodos


public: Accesible desde cualquier parte del código.

private: Solo accesible desde dentro de la misma clase.

protected: Accesible desde la clase y las clases que hereden de ella (veremos esto más adelante).