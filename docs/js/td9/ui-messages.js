$(document).ready(function () {
    const messagesContainer = $("#messagesContainer");
    const toastContainer = $("#toastContainer");

    // Fonction pour afficher un toast
    function showToast(title, message) {
        const toast = $(`
            <div class="toast">
                <i class="info circle icon"></i>
                <div>
                    <strong>${title}</strong>
                    <p>${message}</p>
                </div>
            </div>
        `);

        // Ajouter le toast au conteneur
        toastContainer.append(toast);

        // Supprimer le toast après 4 secondes
        setTimeout(() => {
            toast.remove();
        }, 4000);
    }

    // Ouvrir le modal
    $("#addMessageButton").click(function () {
        $("#messageModal").modal("show");
    });

    // Ajouter un message
    $("#addButton").click(function () {
        const type = $("#messageType").val();
        const icon = $("#messageIcon").val() || "info circle";
        const title = $("#messageTitle").val() || "Sans titre";
        const content = $("#messageContent").val() || "Pas de contenu";
        const closeable = $("#messageCloseable").is(":checked");

        const message = $(`<div class="ui ${type} message"></div>`);

        if (closeable) {
            message.append('<i class="close icon"></i>');
        }

        message.append(`<i class="${icon} icon"></i>`);
        message.append(`<div class="header">${title}</div>`);
        message.append(`<p>${content}</p>`);

        messagesContainer.append(message);

        // Fermer le modal
        $("#messageModal").modal("hide");

        // Effacer le formulaire
        $("#messageForm")[0].reset();

        // Afficher le toast
        showToast("Ajout de message", "Le message a été ajouté avec succès !");
    });

    // Effacer tous les messages
    $("#clearMessagesButton").click(function () {
        messagesContainer.empty();
        messagesContainer.append(`
            <div class="ui message">
                <div class="header">Message par défaut</div>
                <p>Aucun message</p>
            </div>
        `);

        // Afficher le toast
        showToast("Suppression de tous les messages", "Tous les messages ont été supprimés avec succès !");
    });

    // Fermer les messages individuels
    $(document).on("click", ".message .close", function () {
        $(this).closest(".message").remove();

        // Afficher le toast
        showToast("Suppression de message", "Le message a été supprimé avec succès !");
    });

    // Annuler
    $("#cancelButton").click(function () {
        $("#messageModal").modal("hide");
    });
});
