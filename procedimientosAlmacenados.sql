use dbAcceso;

--Agregar usuario--
drop procedure if exists agregarUsuario;

delimiter $$
create procedure agregarUsuario 
	(in _email varchar(20),
	in _clave varchar(12),
	in _nombre varchar(45),
	in _aPaterno varchar(45),
	in _aMaterno varchar(45),
	in _fotoUsuario varchar(45),
	out res int)
begin 
start transaction;
	insert into 'login'('email', 'clave', 'tipoUsuario') values (_email, _clave, 'visitante');
	insert into 'usuario'('nombre', 'aPaterno', 'aMaterno', 'fotoUsuario', 'login_email') values (_nombre, _aPaterno, _aMaterno, _fotoUsuario, _email);
	set res=row_count();
commit;
end $$
delimiter ;

call agregarUsuario ('alicia@hotmail.com', '12345678', 'Alicia', 'Morales', 'De Regil', 'alicia.jpg', @res);
select * from login, usuario where login.email=usuario.login_email;


--Actualizar Usuario--
drop procedure if exists actualizarUsuario;

delimiter $$
create procedure actualizarUsuario
	(in _email varchar(20),
	in _clave varchar(12),
	in _nombre varchar(45),
	in _aPaterno varchar(45),
	in _aMaterno varchar(45),
	in _fotoUsuario varchar(45),
	out res int)
begin
start transaction;
	update 'usuario' 
		set 
		'nombre'=_nombre,
		'aPaterno'=_aPaterno,
		'aMaterno'=_aMaterno,
		'fotoUsuario'=_fotoUsuario,
		'login_email'=_email;
		set res=row_count();
commit;
end $$
delimiter ;

call actualizarUsuario('alicia@hotmail.com', '11111111', 'Alli', 'Mora', 'Dreg', 'foto.jpg', @res);
select * from login, usuario where login.email=usuario.login_email;

--Eliminar Usuario--
drop procedure if exists eliminarUsuario;

delimiter $$
create procedure eliminarUsuario
	(in _email varchar(20),
	out res int)
begin
start transaction;
	delete from 'usuario' where 'login_email'=_email;
	delete from 'login' where 'email'=_email;
	set res= row_count();
commit;
end $$
delimiter ;

call eliminarUsuario('alicia@hotmail.com', @res);
select * from login, usuario where login.email=usuario.login_email;

--Cambiar tipo de usuario--
drop procedure if exists cambiarTipo;

delimiter $$
create procedure cambiarTipo
	(in _email varchar(20),
	in _tipoUsuario enum('Administrador', 'Visitante')
	out res int)
begin
start transaction;
	update 'login'
	set	'tipoUsuario'=_tipoUsuario where 'email'=_email;
commit;
end $$
delimiter ;

call cambiarTipo('alicia@hotmail.com', 'Administrador', @res);
select * from login, usuario where login.email=usuario.login_email;

--Consultas--
drop procedure if exists consulta;

create procedure consulta
	(in _email varchar(20),
		out res int)
begin
start transaction;
	select * from login, usuario where login.usuario=usuario.login_email;
	set res=row_count();
commit;
end $$
delimiter ;

call consulta('alicia@hotmail.com', @res);