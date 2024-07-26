# Init the project:
composer init

# Get up server:
php -S 127.0.0.1:8000

# Minimum Stability
Descripción: Define el nivel mínimo de estabilidad de las versiones de los paquetes que Composer puede instalar.
Opciones comunes: stable, RC (Release Candidate), beta, alpha, dev.
Uso: Si seleccionas stable, Composer solo instalará versiones estables de los paquetes. Si necesitas versiones de desarrollo o de pruebas, puedes optar por niveles de estabilidad más bajos como beta o dev.

# Licence
Descripción: Especifica la licencia bajo la cual se distribuirá tu proyecto.
Ejemplos comunes: MIT, GPL-3.0, Apache-2.0, etc.
Uso: Es importante definir la licencia para aclarar los términos bajo los cuales otros pueden usar, modificar y distribuir tu código.

# PSR-4 Autload mapping
Descripción: Define cómo Composer debe autoload (cargar automáticamente) las clases de tu proyecto de acuerdo con el estándar PSR-4.
Sintaxis: "Namespace\\": "path/to/directory".
Uso: Permite que Composer cargue automáticamente las clases basándose en el namespace. Por ejemplo, si tienes el namespace App\\ y tus clases están en el directorio src, configurarlo como "App\\": "src/" hará que Composer cargue automáticamente las clases desde ese directorio.