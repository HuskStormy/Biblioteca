/****************************************************************************************************************************************************************************************************
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////                                                    /////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////                     CONECCION                      /////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////                     CONECCION                      /////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////                                                    /////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
****************************************************************************************************************************************************************************************************/
//Librerias
const mysql     = require('mysql');
const express   = require('express');
const path      = require('path');
var app         = express();
const bp        = require('body-parser');
app.use(bp.json());

//Parameros
var Vuser       = 'root';
var Vpassword   = '';
var Vhost       = 'localhost';
var VBaseData   = 'biblioteca_modulo_seguridad';
const port      = 3000;

// conectar a la base de datos (Mysql)
var mysqlConnection = mysql.createConnection({
    host: Vhost,
    user: Vuser,
    password: Vpassword,
    database: VBaseData,
    multipleStatements: true
});


//Test de conexion a base de datos
console.log ("\n");
console.log ("\t|                 Api Rest                |");
console.log ("\t|-----------------------------------------|\n");
console.log ("\turl:   http://"+Vhost+":"+port+"/");
mysqlConnection.connect((err)=>{
    if (!err) {
        console.log ('\tConexion Exitosa\n');
    } else {
        console.log('\terror en la connexion con la base de  datos\n');
    }
});

app.listen(port, () => console.log("\tescuchando en el puerto %s", port));

console.log ("Views:");
/****************************************************************************************************************************************************************************************************
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////                                                    /////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////                     RUTAS                          /////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////                     RUTAS                          /////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////                                                    /////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
****************************************************************************************************************************************************************************************************/




// PAGINAS JSON
app.get('/', function (req, res) {
    File_show('public/index.html', req, res);
});

app.get('/usuario', (req, res) => {
    select('call ProSeguridad_Select_TBLusuario();', req, res);
});
app.get('/usuario/:id', (req, res) => {
    select_one('call ProSeguridad_Select_TBLusuario_id(?)', req, res);
});
app.get('/usuario/correo/:id', (req, res) => {
    select_one('call ProSeguridad_Select_TBLusuario_Correo(?)', req, res);
});
app.post('/usuario/add', (req, res) => {
    let rep = req.body;
    
    // Definir los parámetros que serán enviados a la consulta
    var paramet = `SET @p0 = ?; SET @p1 = ?; SET @p2 = ?; SET @p3 = ?; SET @p4 = ?; SET @p5 = ?; SET @p6 = ?; SET @p7 = ?; SET @p8 = ?; SET @p9 = ?; SET @p10 = ?;`;
    // La consulta que invoca el procedimiento almacenado
    var query = ` CALL ProSeguridad_Insert_TBLusuario(@p0, @p1, @p2, @p3, @p4, @p5, @p6, @p7, @p8, @p9, @p10);`;
    
    // Llamar la función Insert pasándole los parámetros correctamente
    Insert(query, paramet, [
        rep.p0,   // estado usuario
        rep.p1,   // rol
        rep.p2,   // centroReginal
        rep.p3,   // Nombre Usuario
        rep.p4,   // contrasena
        rep.p5,   // correo electrónico
        rep.p6,   // DNI
        rep.p7,   // fecha_conexion_ultima
        rep.p8,   // cod primer ingreso
        rep.p9,   // fecha_vencimiento
        rep.p10   // intendos
    ], req, res);
});
app.put('/persona/modify', (req, res) => {
    const {
        p_ID_USUARIO,
        p_ID_ESTADO_USUARIO,
        p_ID_ROL,
        p_ID_CENTRO_REGIONAL,
        p_NOMBRE_USUARIO,
        p_DNI,
        p_CONTRASENA,
        p_CORREO_ELECTRONICO,
        p_FECHA_CONEXION_ULTIMA,
        p_COD_PRIMER_INGRESO,
        p_FECHA_VENCIMIENTO,
        p_INTENTOS
    } = req.body;
    var query   =   " CALL `ProSeguridad_Update_TBLusuario`(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    Put(query, 
        [        
            p_ID_USUARIO,
            p_ID_ESTADO_USUARIO,
            p_ID_ROL,
            p_ID_CENTRO_REGIONAL,
            p_NOMBRE_USUARIO,
            p_DNI,
            p_CONTRASENA,
            p_CORREO_ELECTRONICO,
            p_FECHA_CONEXION_ULTIMA,
            p_COD_PRIMER_INGRESO,
            p_FECHA_VENCIMIENTO,
            p_INTENTOS
        ], 
    req, res);
});
app.put('/persona/Intento/menos', (req, res) => {
    const {
        p0
    } = req.body;
    var query   =   "SET @p0 = ?; UPDATE `tbl_ms_usuario` SET `INTENTOS` = `INTENTOS` - 1 WHERE `ID_USUARIO` = @p0;";
    Put(query, 
        [        
            p0
        ], 
    req, res);
});
app.put('/persona/Estado/Bloqueado', (req, res) => {
    const {
        p0
    } = req.body;
    var query   =   "SET @p0 = ?; UPDATE `tbl_ms_usuario` SET `ID_ESTADO_USUARIO` = '4' WHERE `tbl_ms_usuario`.`ID_USUARIO` = @p0;";
    Put(query, 
        [        
            p0
        ], 
    req, res);
});
app.put('/persona/Intento/Restableser', (req, res) => {
    const {
        p0
    } = req.body;
    var query   =   "SET @p0 = ?;SET @p1 = (SELECT p.VALOR FROM tbl_ms_parametro p WHERE p.ID_PARAMETRO = 1); UPDATE `tbl_ms_usuario` SET `INTENTOS` = @p1 WHERE `tbl_ms_usuario`.`ID_USUARIO` = @p0;";
    Put(query, 
        [        
            p0
        ], 
    req, res);
});


app.get('/parametro/:id', (req, res) => {
    select_one('CALL `ProSeguridad_Select_TBLparametro_id`(?);', req, res);
});

app.get('/Usu_Estad/:id', (req, res) => {
    select_one('SET @p0=?; CALL ProSeguridad_Select_TBLUsuarioEstado_id(@p0);', req, res);
});



app.post('/persona/add', (req, res) => {
    let rep = req.body;
    var paramet =   "SET @p0=?; SET @p1=?; SET @p2=?; SET @p3=?; SET @p4=?; SET @p5=?;";
    var query   =   "CALL `PR_INSERT_PERSONA`(@p0, @p1, @p2, @p3, @p4, @p5);";
    Insert(query, paramet, [rep.p0, rep.p1, rep.p2, rep.p3, rep.p4, rep.p5], req, res);
});
app.put('/persona/modifi', (req, res) => {
    const {
        MyCodigo,PE_NOMBRE,PE_APELLIDO,PE_Empleado,PE_USUARIO,PE_CORREO,PE_CONTRA,PE_DESC,PE_PROF
    } = req.body;
    var query   =   " CALL `PRO_PERSO_ACTUALIZAR`(?, ?, ?, ?, ?, ?, ?, ?, ?);";
    Put(query, [MyCodigo,PE_NOMBRE,PE_APELLIDO,PE_Empleado,PE_USUARIO,PE_CORREO,PE_CONTRA,PE_DESC,PE_PROF] , req, res);
});
app.delete('/persona/delete/:id', (req, res) => {
    const { id }    = req.params;
    var query       = "CALL PR_DELETE_PERSONA(?)";
    Delete(query, [id], req, res);
});





app.get('/actividad', (req, res) => {
    select_one('select * from tbl_ms_parametro;', req, res);
});

app.get('/actividad/:id', (req, res) => {
    select_one('CALL ACT_SELECT_ID(?)', req, res);
});
app.post('/actividad/add', (req, res) => {
    let rep = req.body;
    var paramet =   "SET @p0=?; SET @p1=?; SET @p2=?;";
    var query   =   "CALL ACT_INSERT(@p0, @p1, @p2);";
    Insert(query, paramet, [rep.p0, rep.p1, rep.p2], req, res);
});
app.put('/actividad/modifi', (req, res) => {
    const {
        CODIGO,PER_TITULO,PER_DESCRIPCION,PER_EDAD
    } = req.body;
    var query   =   " CALL `ACT_UPDATE`(?, ?, ?, ?);";
    Put(query, [CODIGO,PER_TITULO,PER_DESCRIPCION,PER_EDAD] , req, res);
});
app.delete('/actividad/delete/:id', (req, res) => {
    const { id }    = req.params;
    var query       = "CALL ACT_DELETE(?)";
    Delete(query, [id], req, res);
});

/****************************************************************************************************************************************************************************************************
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////                                                    /////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////                   FUNCIONES                        /////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////                   FUNCIONES                        /////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////                                                    /////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
****************************************************************************************************************************************************************************************************/
//

//file de la api
async function File_show(fileName, req, res) {
    res.set
    const options = {
      root: path.join(__dirname)
    };
    res.sendFile(fileName, options,function (err) {
      if (err)  console.error('Error sending file:', err);
      else      console.log('get.file ( \'', fileName,'\' )');
  });
}

///funcion GET
async function select(query, req, res) {
    mysqlConnection.query(query,
        (err, rows, fields) => {
            if (!err){
                    res.status(200).json(rows[0]);
                    
                    console.log('get.query( \''+ query +'\' )');
            }   else console.log(err);
        }
    );
}
///funcion GET one
async function select_one(query, req, res) {
    const { id } = req.params;
    mysqlConnection.query(query, [id],
        (err, rows, fields) => {
            if (!err) {
                if (rows[0].length > 0) {
                    res.status(200).json(rows[0][0]);
                    console.log('get.query( \''+ query +'\' ), id(\'' + id + '\')');
                } else {
                    res.status(200).json(rows[1][0]);
                }
            } else {
                res.status(500).json([null]);
                console.log(err);
            }
        }
    );
}
//funcion POST
async function Insert(query, paramet, CallVal, req, res) {
    mysqlConnection.query(paramet + query, CallVal,
        (err, rows, fields) => {
            if (!err) {
                console.log('post.query( \''+ query +'\' parametros: ' + paramet);
                res.send("Ingresado correctamente !!");
            } else {
                console.log(err);
                res.send("error al ingresas");
            }
        }
    );
}
//funcion POST
async function Put(query, CallVal, req, res) {
    mysqlConnection.query( query, CallVal,
        (err, rows, fields) => {
            if (!err) {
                res.status(200).json(req.body);
                console.log('put.query( \''+ query +'\' )');
            } else {
                console.log(err);
            }
        }
    );
}
//funcion DELETE
async function Delete(query, CallVal, req, res) {
    mysqlConnection.query(query,CallVal,
        (err, rows, fields) => {
            if (!err) {
                res.status(200).json({ message: `Persona con ID eliminada correctamente.` });
                console.log('delete.query( \''+ query +'\' )');
            } else {
                console.log(err);
                res.status(500).json({ error: 'Error al eliminar la persona.' });
            }
        }
    );
}
