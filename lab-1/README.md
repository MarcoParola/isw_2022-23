# Laboratorio 1

*"Un posto per ogni cosa, ogni cosa al suo posto"*

**Cosa è la logica di business o logica di dominio? E qual è il posto giusto all'interno di un progetto?**
La logica di business o logica di dominio è quella parte del programma che codifica le regole di business del mondo reale che determinano come i dati possono essere creati, memorizzati e modificati. Essa prescrive il modo in cui gli oggetti di business interagiscono tra loro e impone i percorsi e i metodi con cui gli oggetti di business vengono acceduti e aggiornati. Tale logica è incorporata nelle classi di servizio. 

## Service classes
L'idea delle classi di servizio non è integrata nel framework o documentata nella documentazione ufficiale. Di conseguenza, le persone si riferiscono ad esse in modo diverso. 
Non essendo integrate all'interno di Laravel, non c'è un comando artisan make per creare una classe di servizio. Si possono tenere le classi dove si vuole. Una buona soluzione è mettere le nostre classi di servizio in ``app/Services``.