# change to script
Dir.chdir File.expand_path(File.dirname(__FILE__))
# run compass compiler
puts 'Compass/Sass now running in the background.'
puts %x{sass --compass --sourcemap --watch scss:css}