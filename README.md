# Unihome - trova l'ago nel pagliaio
Questo progetto vuole creare una pagina semplice, leggera e facilmente personalizzabile per 
aiutare gli studenti universitari a trovare l'_ago_ (la pagina che vogliono visualizzare)
nel _pagliaio_ (la galassia dei siti informativi universitari). 
Il progetto è completamente **open-source** e **libero**, rilasciato sotto licenza MIT; 
è incoraggiata la condivisione e la modifica del codice sorgente. Se pensi di poter migliorare
qualcosa **apri una pull request**!

I dati inseriti nella repository si riferiscono al mio corso (Informatica)
dell'Università degli Studi di Milano; è naturalmente possibile modificare 
i link e gli insegnamenti tramite il file `src/data.php`. 

## Deploy (Docker)
Il progetto supporta pienamente Docker ed è fatto per funzionare dietro a un reverse proxy.
Per il deploy utilizza docker-compose; per avviarlo esegui il seguente comando:

```shell script
docker-compose up -d
```

docker-compose creerà automaticamente due container: un worker php-fpm e un'instanza nginx. 
Quest'ultima è nella rete esterna `nginx_net` che, nel mio ambiente di produzione,
è collegata a Nginx Proxy Manager. Tuttavia, se non si è interessati a questo tipo di approccio,
eseguendo `docker inspect unihome_nginx | grep IPAddress` si può reperire l'IP privato del container
ed accedere al servizio HTTP sulla porta 80. 

Se si è temerari, nel docker-compose.yml sotto il servizio "unihome-nginx" si può aggiungere
l'istruzione:
```yaml
ports:
  - 8080:80
```
per esporre sulla porta dell'host 8080 il servizio. Personalmente, consiglio il setup di un reverse proxy
con SSL/TLS ed altre misure di sicurezza configurate.
