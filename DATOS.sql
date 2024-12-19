-- Insertar en TBL_MS_USUARIO_ESTADO
INSERT INTO TBL_MS_USUARIO_ESTADO (ID_ESTADO_USUARIO, DESCRIPCION) VALUES
(1, 'Activo'),
(2, 'Inactivo'),
(3, 'Suspendido');

-- Insertar en TBL_MS_ROL
INSERT INTO TBL_MS_ROL (ID_ROL, CONTRASENA) VALUES
(1, 'admin123'),
(2, 'user123');

-- Insertar en TBL_MS_OBJETOS_TIPO
INSERT INTO TBL_MS_OBJETOS_TIPO (ID_OBJETO_TIPO, DESCRIPCION) VALUES
(1, 'Módulo'),
(2, 'Función');

-- Insertar en TBL_MS_USUARIO
INSERT INTO TBL_MS_USUARIO (ID_USUARIO, ID_ESTADO_USUARIO, ID_ROLL, ID_CENTRO_REGIONAL, NOMBRE_USUARIO, CONTRASENA, CORREO_ELECTRONICO, FECHA_CONEXION_ULTIMA, COD_PRIMER_INGRESO, FECHA_VENCIMIENTO) VALUES
(1, 1, 1, 101, 'Juan Pérez', 'pass123', 'juan.perez@example.com', '2024-12-18 08:30:00', 'CP001', '2025-12-18'),
(2, 2, 2, 102, 'Ana Gómez', 'user123', 'ana.gomez@example.com', '2024-12-17 09:00:00', 'CP002', '2024-12-17'),
(3, 1, 2, 103, 'Carlos Rodríguez', 'pass456', 'carlos.rodriguez@example.com', '2024-12-16 10:15:00', 'CP003', '2025-12-16');

-- Insertar en TBL_MS_OBJETOS
INSERT INTO TBL_MS_OBJETOS (ID_OBJETO, ID_OBJETO_TIPO, NOMBRE_OBJETO, DESCRIPCION) VALUES
(1, 1, 'Módulo de Usuarios', 'Permite la gestión de usuarios'),
(2, 2, 'Función de Reportes', 'Permite generar informes de actividad'),
(3, 1, 'Módulo de Administración', 'Permite gestionar la configuración general del sistema');

-- Insertar en TBL_MS_PERMISOS
INSERT INTO TBL_MS_PERMISOS (ID_PERMISOS, ID_OBJETO, ID_ROL, PERMISO_INSERCION, PERMISO_ELIMINACION, PERMISO_ACTUALIZACION, PERMISO_CONSULTAR, PERMISO_BUSCAR, FECHA_DE_CREACION, ID_USUARIO_CREADOR) VALUES
(1, 1, 1, TRUE, TRUE, TRUE, TRUE, TRUE, '2024-12-18 08:00:00', 1),
(2, 2, 2, TRUE, FALSE, TRUE, TRUE, FALSE, '2024-12-17 10:00:00', 2),
(3, 3, 1, TRUE, TRUE, TRUE, TRUE, TRUE, '2024-12-16 11:00:00', 3);

-- Insertar en TBL_MS_BITACORA
INSERT INTO TBL_MS_BITACORA (ID_BITACORA, ID_USUARIO, ID_OBJETO, FECHA, ACCION, DESCRIPCION) VALUES
(1, 1, 1, '2024-12-18 08:15:00', 'Creación', 'Se creó un nuevo usuario en el sistema'),
(2, 2, 2, '2024-12-17 09:30:00', 'Actualización', 'Se actualizó el informe de actividades'),
(3, 3, 3, '2024-12-16 11:30:00', 'Eliminación', 'Se eliminó un módulo de configuración');

-- Insertar en TBL_MS_HISTORIAL_CONTRASENA
INSERT INTO TBL_MS_HISTORIAL_CONTRASENA (ID_HIST_CONTRASENA, ID_USUARIO, CONTRASENA) VALUES
(1, 1, 'pass123'),
(2, 2, 'user123'),
(3, 3, 'pass456');

-- Insertar en TBL_MS_PARAMETRO
INSERT INTO TBL_MS_PARAMETRO (ID_PARAMETRO, ID_USUARIO, PARAMETRO, VALOR, FECHA_CREACION, FECHA_MODIFICACION) VALUES
(1, 1, 'Idioma', 'Español', '2024-12-18 08:30:00', '2024-12-18 08:30:00'),
(2, 2, 'Tema', 'Oscuro', '2024-12-17 09:00:00', '2024-12-17 09:00:00'),
(3, 3, 'Notificaciones', 'Activadas', '2024-12-16 10:00:00', '2024-12-16 10:00:00');
