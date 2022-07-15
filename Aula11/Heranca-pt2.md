# Herança - PHP POO - pt.2

 -- Arvore de Heranças --

 Navegação pela Herança
    - Classe A -CLasse Raiz - (Não possui Superclasse)
        - AA
            -AAA
        - AB --Subclasse de A
            -ABA -Superclasse de ABAA
                - ABAA
                - ABAB -classe folha (não possui subclasses)
            -ABB 
        - AC
            -ACA (Descendente(Classe superior sem contar a classe mãe))

            Perconcer a Arvore de Cima para Baixo - Especialização
            De baixo pra cima - Generalização

# Tipos de Herança
    - 1 - Herança de implementação (Herança pobre)
    
    - 2 - Herança para diferença


# Abstrato e Final 

Metodos e classes podem ser abstratos ou finais

-   Classe Abstrata
    Não pode ser instanciada(Não pode gerar objetos)

-   Método Abstrato
    Declarado mas não implementade na progenitora

-   Classe Final
    Não pode ser herdade por outra classe
    Obrigatoriamente folha;

-   Método Final
    Não pode ser sobrescrito pelas suas sub-classes.
    Obragatóriamente Herdado 
