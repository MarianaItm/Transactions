# Test VirtualSoft - Transacciones

## Requisitos

- PHP 8.1 o superior
- Composer
- Node.js

## Configuración

1. Clona el repositorio

## Ejecutar localmente

1. Instalar dependencias:
```bash
composer install
npm install
```

2. Configurar variables de entorno:
```bash
cp .env.example .env
php artisan key:generate
```

3. Configurar la base de datos:
```bash
# Asegúrate de que tu base de datos esté creada y configurada en .env
php artisan migrate
```

4. Compilar assets (si es necesario):
```bash
npm run dev
```

5. Generar credenciales de PayPal:
```bash
# Añade tus credenciales de PayPal en el archivo .env:
# PAYPAL_MODE=sandbox
# PAYPAL_CLIENT_ID=tu_client_id
# PAYPAL_SECRET=tu_secret
```

6. Inicia el servidor de desarrollo:
```bash
php artisan serve
# o
php composer dev
```

7. Ingresa a http://localhost:8000/

**Notas importantes:**
- Verifica que las credenciales de PayPal estén correctamente configuradas en `.env`
- Asegúrate de que la base de datos esté corriendo antes de ejecutar las migraciones
- En macOS, asegúrate de tener PHP 8.1+ instalado: `php -v`

## Explicación del Flujo de Recarga con PayPal

Esta aplicación permite a los usuarios recargar su billetera virtual de forma segura mediante la pasarela de pagos PayPal. El proceso está dividido en los siguientes pasos:

### 1. **Autenticación del Usuario**
El usuario inicia sesión en la aplicación y accede a su panel de control, donde puede visualizar:
- Su saldo actual en la billetera
- Opciones para realizar una recarga o consultar transacciones

### 2. **Formulario de Recarga**
El usuario ingresa el monto deseado y confirma la intención de pagar. La aplicación valida que:
- El monto sea mayor a cero
- El usuario esté autenticado correctamente

### 3. **Redirección Segura a PayPal**
La aplicación genera una solicitud de pago y redirige al usuario al sitio seguro de PayPal, donde puede:
- Revisar los detalles de la transacción
- Completar el pago con su método preferido (tarjeta, cuenta PayPal, etc.)

### 4. **Confirmación y Retorno**
PayPal procesa el pago y redirige al usuario nuevamente a la aplicación con un token de confirmación que identifica la transacción.

### 5. **Validación y Captura**
La aplicación verifica la transacción con la API de PayPal para confirmar que:
- El pago fue procesado correctamente
- Los datos coinciden con los solicitados

Una vez validado, se registra la transacción en la base de datos y se actualiza el saldo de la billetera del usuario.

### 6. **Historial de Transacciones**
El usuario puede acceder a un listado completo que muestra:
- Monto de cada recarga
- Estado actual
- Fecha y hora de la transacción

### 7. **Búsqueda Avanzada**
El usuario puede buscar una transacción específica por su ID de PayPal y visualizar:
- Detalles completos de la transacción
- Estado actual en PayPal
- Información relevante (monto, estado, fecha)

## Logs de Errores

Los logs se guardan en:
```
storage/logs/laravel.log
```

Acceso mediante terminal:
```bash
tail -f storage/logs/laravel.log
```

...existing code...
