
CREATE DATABASE testgpscontrol
  WITH OWNER = postgres
       ENCODING = 'UTF8'
       TABLESPACE = pg_default
       LC_COLLATE = 'es_CL.UTF-8'
       LC_CTYPE = 'es_CL.UTF-8'
       CONNECTION LIMIT = -1;


CREATE TABLE usuario
(
id SERIAL UNIQUE, 
nombres varchar (40),
apellido_paterno varchar (40),
apellido_materno varchar (40),
rut text,
telefono text,
email varchar (40),
status integer,
fecha_nacimiento date,
updated_at timestamp default current_timestamp,
created_at timestamp default current_timestamp,
PRIMARY KEY (id)
);



INSERT INTO public.usuario (nombres, apellido_paterno,apellido_materno,rut,telefono,email,status,fecha_nacimiento) 
VALUES ('Ivan Alexis','Sobarzo','Erices','17.801.781-0','976417931','bambasten9@gmail.com','1','06-01-1992');
INSERT INTO public.usuario (nombres, apellido_paterno,apellido_materno,rut,telefono,email,status,fecha_nacimiento) 
VALUES ('Naruto Sasuke','Uzumaki','Uchiha','76.576.576-5','912345678','naruto@gmail.com','1','16-11-1999');
INSERT INTO public.usuario (nombres, apellido_paterno,apellido_materno,rut,telefono,email,status,fecha_nacimiento) 
VALUES ('Killua Gon','Soldick','Frecss','54.354.354-3','987654321','killua@gmail.com','1','21-11-2002');
INSERT INTO public.usuario (nombres, apellido_paterno,apellido_materno,rut,telefono,email,status,fecha_nacimiento) 
VALUES ('Sebastian Nicolas','Alvarado','Pedreros','43.243.243-2','987654321','salvarado@gmail.com','1','22-07-2003');
INSERT INTO public.usuario (nombres, apellido_paterno,apellido_materno,rut,telefono,email,status,fecha_nacimiento) 
VALUES ('Juan Francisco','Baeza','Fica','32.132.132-1','987654321','jfrancisco@gmail.com','1','20-08-1991');
INSERT INTO public.usuario (nombres, apellido_paterno,apellido_materno,rut,telefono,email,status,fecha_nacimiento) 
VALUES ('Miguel Manuel','Martinez','Miranda','98.798.798-7','987654321','mmartinez@gmail.com','1','22-08-2001');
INSERT INTO public.usuario (nombres, apellido_paterno,apellido_materno,rut,telefono,email,status,fecha_nacimiento) 
VALUES ('Camila Carol','Flores','Castro','87.687.687-6','987654321','cflores@gmail.com','0','04-01-2011');
INSERT INTO public.usuario (nombres, apellido_paterno,apellido_materno,rut,telefono,email,status,fecha_nacimiento) 
VALUES ('Maria Jose','Sanchez','Acuña','65.465.465-4','987654321','msanchez@gmail.com','0','05-07-1987');
INSERT INTO public.usuario (nombres, apellido_paterno,apellido_materno,rut,telefono,email,status,fecha_nacimiento) 
VALUES ('Patricio Mauricio','Soto','Diaz','21.021.021-0','987654321','psoto@gmail.com','1','27-03-1956');
INSERT INTO public.usuario (nombres, apellido_paterno,apellido_materno,rut,telefono,email,status,fecha_nacimiento) 
VALUES ('Benito Larry','Vidal','Vargas','11.111.111-1','987654321','bvidal@gmail.com','0','16-09-1978');
INSERT INTO public.usuario (nombres, apellido_paterno,apellido_materno,rut,telefono,email,status,fecha_nacimiento) 
VALUES ('Marcelo Jose','Molina','Silva','66.666.666-6','987654321','mmolina@gmail.com','1','30-01-1986');
INSERT INTO public.usuario (nombres, apellido_paterno,apellido_materno,rut,telefono,email,status,fecha_nacimiento) 
VALUES ('Pedro','Perez','Placencia','15.896.654.-8','987654321','pperez@gmail.com','1','19-05-1997');
INSERT INTO public.usuario (nombres, apellido_paterno,apellido_materno,rut,telefono,email,status,fecha_nacimiento) 
VALUES ('Marcos','Medel','Gonzalez','14.895.632-8','987654321','mgonzalez@gmail.com','1','15-04-2000');
INSERT INTO public.usuario (nombres, apellido_paterno,apellido_materno,rut,telefono,email,status,fecha_nacimiento) 
VALUES ('Diego','Hidalgo','Santos','10.258.965-7','987654321','dsantos@gmail.com','1','26-10-1992');
