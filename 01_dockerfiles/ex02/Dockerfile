FROM ruby
MAINTAINER sael-you

RUN apt update -y && apt upgrade -y \
 &&	apt install -y \
	build-essential \
	nodejs \
	sqlite3

ONBUILD COPY sample_app /opt/app
ONBUILD WORKDIR /opt/app

ONBUILD EXPOSE 3000
ONBUILD RUN bundle install
ONBUILD RUN bundle exec rake db:migrate
ONBUILD RUN bundle exec rake db:seed
