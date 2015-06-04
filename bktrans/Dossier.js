// cette chose �trange permet de ne n'avoir aucune variable visible dans la page
// comme si elles n'existaient pas. Pas de polution de l'espace global, bien.
(function () {
 
        var champs = [
                "desc",
                "val",
				"monnaie",
				"Date",
                
            ],
 
            // fin de la config
            modifier = document.getElementById("modifier"),
            valider = document.getElementById("valider"),
            ajouter_ligne = document.getElementById("ajouter_ligne"),
            table = document.getElementById("frais"),
            form = document.getElementById("form_frais");
 
 
 
        function action_valider () {
            champs_disabled(true);
            valider.disabled = true;
            modifier.disabled = false;
 
            /*
                La partie en AJAX c'est ici que �a se passe
 
            */
 
        }
        // d�sactive les bouttons qui vont bien
        function action_modifier () {
            champs_disabled(false);
            valider.disabled = false;
            modifier.disabled = true;
        }
        // d�sactiver les champs pour pas tout niquer
        function champs_disabled (disabled) {
            var i,c = table.tBodies[0].getElementsByTagName("input"),
                l = c.length;
 
            for (i = 0; i < l; i++) {
                c[i].disabled = disabled;
            }
        }
 
        form.onsubmit = function () {return true;} // on empeche d'envoyer le formulaire
        modifier.onclick = action_modifier; // on rend les inputs actifs
        valider.onclick = action_valider; // on envoie la requete AJAX et on rens les champs disabled
 
        ajouter_ligne.onclick = function () {// le petit bouton magique pour rajouter des lignes
 
            var i, supprimer,
            tbody = table.tBodies[0],
            ligne = tbody.insertRow(-1);
 
            function champ (name, value) { // juste parce que c'est chiant de retapper
                var t = document.createElement("input");
 
                t.type = "text";
                t.name = t.id = name +"[]";
                t.value = value || "";
				t.required="required";
 
                return t;
            }
            // ici on rajoute les cellules (<td>) des diff�rentes rubriques�
            for (i = 0; i < champs.length; i++) {
                (ligne.insertCell(i)).appendChild(champ(champs[i]));
            }
             
            supprimer = document.createElement("button");
            supprimer.type = "button";
            supprimer.className = "del";
           supprimer.innerHTML = "<img src=images/sup.png>";
            supprimer.onclick = function () {
                var tr = this.parentNode.parentNode;
                    index = tr.sectionRowIndex;
 
                tbody.deleteRow(index);
                valider.disabled = false;
                modifier.disabled = true;
            };
	
 
 
            i = ligne.insertCell(champs.length);
            i.className = "actions";
            i.appendChild(supprimer);
 
            //maintenant on va renum�roter les lignes pour �viter les merdouilles
            var n, nt, inputs, index;
            //c'est pas g�nial comme d�claration mais bon�
 
            for (var n = 0, nt = tbody.rows.length; n < nt; n++) {
                inputs = tbody.rows[n].getElementsByTagName("input");
                index = tbody.rows[n].sectionRowIndex;
                for (var nn = 0, ntn = inputs.length; nn < ntn; nn++) {
                    inputs[nn].id = inputs[nn].name = inputs[nn].name.replace(/\[\d*\]$/, ""+index+"");
                }
            }
 
            // on a rajout� une ligne donc on r�active la soumission de formulaire
            valider.disabled = false;
            modifier.disabled = true;
        };
             
 
    })();