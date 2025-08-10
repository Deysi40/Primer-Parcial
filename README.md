# Sistema de Gestión de Animales - PHP
Descripción  
Este es un prototipo de software desarrollado como parte de una evaluación,   aplicando:  

Clase abstracta  
Dos interfaces  
Clases concretas que implementan las interfaces y heredan la clase abstracta  
Servicios  
Repositorios  
Buenas prácticas de desarrollo y control de versiones con GIT  

# Estructura del Proyecto
```bash
src/
├── conf/
├── Entities/
│   ├── Interfaces/
│   │   ├── AnimalInterface.php         # Interfaz general para animales
│   │   └── DogInterface.php            # Interfaz específica para perros
│   ├── AnimalEntity.php                # Clase abstracta base
│   └── DogEntity.php                   # Clase concreta que hereda de AnimalEntity e implementa interfaces
├── Repositories/
│   └── AnimalRepositoryInterface.php   # Interfaz para repositorio
├── Services/
│   └── AnimalService.php               # Servicio que usa las clases/interfaces
├── LICENSE
└── README.md
```
# Instalación y uso  
1. Clona el repositorio:  
   git clone https://github.com/Deysi40/Primer-Parcial.git  

2. Navega al directorio del proyecto:  
  cd QA  

4. Ejecuta los archivos PHP de prueba o integra con un framework si es necesario:  
  php src/Services/AnimalService.php  

# Clases principales  
AnimalEntity.php: Clase abstracta que define atributos comunes como color, sexo, etc.  
AnimalInterface.php: Interfaz general para el comportamiento animal.  
DogInterface.php: Interfaz específica para comportamientos caninos.  
DogEntity.php: Clase concreta que extiende AnimalEntity e implementa ambas interfaces.  
AnimalService.php: Clase de servicio que centraliza la lógica de negocio.  
