# config valid only for current version of Capistrano
lock '3.4.0'

set :application, 'geefx_website'
set :repo_url, 'git@github.com:DestructiveDigital/geefx.website.git'

# Default branch is :master
# ask :branch, `git rev-parse --abbrev-ref HEAD`.chomp

# Default deploy_to directory is /var/www/my_app_name
set :deploy_to, '/var/www/w/geefx.website'

# Default value for :scm is :git
# set :scm, :git

# Default value for :format is :pretty
# set :format, :pretty

# Default value for :log_level is :debug
# set :log_level, :debug

# Default value for :pty is false
# set :pty, true

# Default value for :linked_files is []
# set :linked_files, fetch(:linked_files, []).push('config/database.yml', 'config/secrets.yml')

# Default value for linked_dirs is []
# set :linked_dirs, fetch(:linked_dirs, []).push('log', 'tmp/pids', 'tmp/cache', 'tmp/sockets', 'vendor/bundle', 'public/system')

# Default value for default_env is {}
# set :default_env, { path: "/opt/ruby/bin:$PATH" }

# Default value for keep_releases is 5
# set :keep_releases, 5

namespace :deploy do
  
  task :dbupdate do
    on roles(:web) do
      execute "cd #{release_path}/public && export APPLICATION_ENV='qa' && wp-cli search-replace 'geefx.website.dev.deanwhitehouse.lo:8080' 'geefx.website.qa.deanwhitehouse.co.uk' --allow-root --debug --all-tables-with-prefix"
      execute "cd #{release_path}/public && export APPLICATION_ENV='qa' && wp-cli cache flush"
    end
  end
  
  after :deploy, "deploy:dbupdate"
  
  after :restart, :clear_cache do
    on roles(:web), in: :groups, limit: 3, wait: 10 do
      # Here we can do anything such as:
      # within release_path do
      #   execute :rake, 'cache:clear'
      # end
    end
  end

end
