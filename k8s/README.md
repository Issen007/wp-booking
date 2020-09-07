# Kubernetes installation of Wordpress
This is a great quick test site you can create for playing around with Item-Booking.

## Change before apply
Open following files and change the settings in each file.
### configmap.yaml
`- WORDPRESS_DB_USER` Change to a MariaDB SQL User name

### mariadn-pvc
`- storageClassName` Change to a StorageClass that can provide Persistent Volume

### mariadb-secret.yaml
`- MYSQL_USER` You need to insert a base64 line containing your MariaDB SQL User name (Typ in your bash prompt 'echo -n USERNAME | base64 -w0')
`- MYSQL_PASSWORD` You need to insert a base64 encrypted password
`- MYSQL_ROOT_PASSWORD` You need to insert a base64 encrypted password

### route.yaml
`- host` change to the URL that you want the Wordpress site to respond to. Make sure you are using the Openshift standard FQDN. If you don't know you can then skip this file and run instead `oc expose svc/wordpress` and let Openshift create the URL for you.

### wp-pvc.yaml
`- storageClassName` Change to a StorageClass that can provide Persistent Volume
