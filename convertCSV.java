import org.apache.poi.ss.usermodel.Row;
import org.apache.poi.ss.usermodel.Sheet;
import org.apache.poi.ss.usermodel.Workbook;
import org.apache.poi.ss.usermodel.WorkbookFactory;
import org.apache.poi.ss.usermodel.Cell;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileOutputStream;


public class convertCSV {
    //function to obtain string buffer from excel file
    public static StringBuffer toCSV(Sheet sheet) {
        StringBuffer data = new StringBuffer();
        Row row;
        for (int i = 0; i < sheet.getLastRowNum() + 1; i++) {
            row = sheet.getRow(i);

            for (int j = 0; j < row.getLastCellNum(); j++) {
                Cell cell = row.getCell(j);

                switch (cell.getCellType()) {
                    case BOOLEAN:
                        data.append(cell.getBooleanCellValue() + ",");
                        break;
                    case NUMERIC:
                        data.append(cell.getNumericCellValue()+ ",");
                        break;
                    case STRING:
                        data.append(cell.getStringCellValue()+ ",");
                        break;
                    case BLANK:
                        data.append(",");
                        break;
                    default:
                        data.append(cell+ ",");
                }
            }
            data.append('\n');
        }
        return data;
    }

    //Main function
    public static void main(String[] args){

        String fileName = args[0];
        String directory = System.getProperty("user.dir");
        directory = directory.replace('\\', '/');
        String fileNameWithoutExt = FilenameUtils.removeExtension(fileName);
        String extension = FilenameUtils.getExtension(fileName);
        String inputPath = "";
        if(extension.equalsIgnoreCase("xlsx"))
            inputPath = directory + "/convertedFile/" + fileNameWithoutExt + ".xlsx";
        else if (extension.equalsIgnoreCase("xls"))
            inputPath = directory + "/convertedFile/" + fileNameWithoutExt + ".xls";
        String outputPath = directory + "/convertedFile/" + fileNameWithoutExt + ".csv";
        File inputFile = new File(inputPath);
        File outputFile = new File(outputPath);

        try {
            FileOutputStream fos = new FileOutputStream(outputFile);
            FileInputStream fis = new FileInputStream(inputFile);

            Workbook workbook = null;
            workbook = WorkbookFactory.create(fis);

            StringBuffer strbuff = null;

            for(int i=0;i<workbook.getNumberOfSheets();i++) {
                strbuff = bufferValue(workbook.getSheetAt(i));
            }

            fos.write(strbuff.toString().getBytes());

            fis.close();
            fos.close();
        } catch (Exception e) {
            //print error message when something wrong
            System.out.println("Error Detected!");
        }
    }
}