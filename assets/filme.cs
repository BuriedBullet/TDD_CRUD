using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Crud
{
    #region Filme
    public class Filme
    {
        #region Member Variables
        protected int _id;
        protected string _titulo;
        protected unknown _data_lancamento;
        protected string _duracao;
        protected string _sinopse;
        #endregion
        #region Constructors
        public Filme() { }
        public Filme(string titulo, unknown data_lancamento, string duracao, string sinopse)
        {
            this._titulo=titulo;
            this._data_lancamento=data_lancamento;
            this._duracao=duracao;
            this._sinopse=sinopse;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Titulo
        {
            get {return _titulo;}
            set {_titulo=value;}
        }
        public virtual unknown Data_lancamento
        {
            get {return _data_lancamento;}
            set {_data_lancamento=value;}
        }
        public virtual string Duracao
        {
            get {return _duracao;}
            set {_duracao=value;}
        }
        public virtual string Sinopse
        {
            get {return _sinopse;}
            set {_sinopse=value;}
        }
        #endregion
    }
    #endregion
}