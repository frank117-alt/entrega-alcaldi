deacuerdo al punto se entiendo que el servidor corre en linux

aqui se deja el comando para su uso
crontab permite ejecutar script en segundo plano 
2.ejecucion de crontab para realizar dicha tarea automatica
crontab -e
3. agregar esta linea
0 12 * * *  /usr/local/bin/php /directorio/donde/se/encuentra
0 12 * * * 

4. ahora ejecuta para ver los procesos y verificar
crontab -l se verifica en proceso

dado que tengo una capa gratuita no me permite ejecutar en la terminal  se realiza en proceso en local