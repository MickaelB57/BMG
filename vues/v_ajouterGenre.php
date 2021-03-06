<?php
/**
 * Page de gestion des genres

 * @author 
 * @package default
 */
// inclure les bibliothèques de fonctions
?>
        <div id="content">
            <h2>Gestion des genres</h2>
            <div id="object-list">
                    <form action="?uc=gererGenres&action=ajouterGenre&option=validerSaisie" method="post">
                        <div class="corps-form">
                            <fieldset>
                                <legend>Ajouter un genre</legend>
                                <table>
                                    <tr>
                                        <td>
                                            <label for="txtCode">
                                                Code :
                                            </label>
                                        </td>
                                        <td>
                                            <input 
                                                type="text" id="txtCode" 
                                                name="txtCode"
                                                size="3" maxlength="3"
                                                 <?php
                                                        if (!empty($strCode)) {
                                                            echo ' value="'.$strCode.'"';
                                                        }
                                                    ?>
                                                />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <label for="txtLibelle">
                                                Libellé :
                                            </label>
                                        </td>
                                        <td>
                                            <input 
                                                type="text" id="txtLibelle" 
                                                name="txtLibelle"
                                                size="50" maxlength="50"
                                                   <?php
                                                        if (!empty($strLibelle)) {
                                                            echo ' value="'.$strLibelle.'"';
                                                        }
                                                    ?>
                                                />
                                        </td>
                                    </tr>
                                </table>
                            </fieldset>
                        </div>
                        <div class="pied-form">
                            <p>
                                <input id="cmdValider" name="cmdValider" 
                                       type="submit"
                                       value="Ajouter"
                                       />
                            </p> 
                        </div>
                    </form>
            </div>
        </div>