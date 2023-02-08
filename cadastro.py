from flask import Flask, request

app = Flask(__name__)

@app.route('/cadastro', methods=['POST'])
def cadastro():
  name = request.form['name']
  email = request.form['email']
  
  # salvar ou processar os dados aqui
  
  return 'Cadastro realizado com sucesso!'

if __name__ == '__main__':
  app.run()
