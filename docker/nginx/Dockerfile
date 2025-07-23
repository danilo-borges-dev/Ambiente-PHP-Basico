FROM nginx:1.23

# Copia o arquivo de configuração
COPY default.conf /etc/nginx/conf.d/default.conf

# Copia apenas os arquivos públicos (HTML, JS, CSS, etc.)
COPY . /var/www